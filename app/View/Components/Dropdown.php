<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $name;
    public $items;
    public $selectedRaw;
    public $selectedName;
    public $placeholder;
    public $width;
    public $autosubmit;
    public $buttonClass;
    public $showAll;
    public $showScrollbar;

    public function __construct($name = '', $items = [], $selected = null, $placeholder = 'Select', $width = 'w-48', $autosubmit = true, $buttonClass = 'bg-gray-900 border border-gray-700 text-gray-100 rounded-xl px-3 py-2 flex items-center justify-between gap-3', $showAll = false, $showScrollbar = false)
    {
        $this->name = $name;
        $this->items = collect($items)->values()->all();
        $this->selectedRaw = $selected ?? '';
        $found = collect($this->items)->firstWhere('value', (string) $this->selectedRaw);
        $this->selectedName = $found['label'] ?? $placeholder;
        $this->placeholder = $placeholder;
        $this->width = $width;
        $this->autosubmit = filter_var($autosubmit, FILTER_VALIDATE_BOOLEAN);
        $this->buttonClass = $buttonClass;
        $this->showAll = filter_var($showAll, FILTER_VALIDATE_BOOLEAN);
        $this->showScrollbar = filter_var($showScrollbar, FILTER_VALIDATE_BOOLEAN);
    }

    public function render()
    {
        return view('components.dropdown');
    }
}
