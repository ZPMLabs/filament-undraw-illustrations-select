<?php

namespace ZPMLabs\FilamentUndraw\Forms\Components;

use Filament\Forms\Components\Select;

class UndrawSelect extends Select {
    protected string $view = 'filament-undraw::undraw-select';
    protected string $searchResultSize = 'w-40 h-40';
    protected string $selectedOptionSize = 'w-40 h-40';
    protected int $limit = 30;

    public static function make(?string $name = null): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure();
        $static
            ->label('Undraw Illustration')
            ->searchable()
            ->allowHtml()
            ->getSearchResultsUsing(function (string $search) use ($static) {
                /** @var \Undraw\UndrawClient $u */
                $u = app(\Undraw\UndrawClient::class);

                // Vraćamo [value => HTML label]
                return collect($u->search($search, $static->limit))
                    ->mapWithKeys(function ($i) use ($static) {
                        $url = $i->mediaUrl;
                        $title = e($i->title);

                        $html = <<<HTML
<div class="flex items-center gap-3"><img src="{$url}" alt="{$title}" class="{$static->searchResultSize} shrink-0 object-contain" loading="lazy" /></div>
HTML;

                        return [$url => $html];
                    })
                    ->all();
            })
            ->getOptionLabelUsing(function ($value) use ($static) {
                if (blank($value)) return null;

                /** @var \Undraw\UndrawClient $u */
                $u = app(\Undraw\UndrawClient::class);
                $title = e(optional($u->getSvg($value))->title ?? $value);

                return <<<HTML
<div class="flex items-center gap-2"><img src="{$value}" alt="{$title}" class="{$static->selectedOptionSize} object-contain" /></div>
HTML;
            })
            ->extraAttributes(['class' => 'undraw-select'])
            ->placeholder(__('Pick Illustration'))
            ->hint('Search undraw…');

        return $static;
    }

    public function limit (int $limit): static {
        $this->limit = $limit;

        return $this;
    }

    public function searchResultSize (string $searchResultSize): static {
        $this->searchResultSize = $searchResultSize;

        return $this;
    }

    public function selectedOptionSize (string $selectedOptionSize): static {
        $this->selectedOptionSize = $selectedOptionSize;

        return $this;
    }
}