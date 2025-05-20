<?php

namespace Perspikapps\KlickPages;

use Illuminate\Contracts\View\View;

class KlickPagesController
{
    protected ?string $namespace = null;

    public function __construct(?string $namespace = null)
    {
        $this->namespace = $namespace;
    }

    public function view(string $page): View
    {

        if (str_starts_with($page, '_')) {
            abort(404);
        }

        $view = $this->namespace.'::'.config('pages.views.path', 'pages').'.'.$page;

        if (view()->exists($view)) {
            return view($view);
        }

        if ($model = config('pages.model')::find($page)) {
            if ($model->password) {
                abort_unless(request()->query('password') === $model->password, 403);
            }

            seo()
                ->title($model->title)
                ->description(Str::limit($model->content, 100));

            return view(config('pages.views.markdown'), ['page' => $model]);
        }

        abort(404);
    }
}
