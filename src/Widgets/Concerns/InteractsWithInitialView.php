<?php

namespace Saade\FilamentFullCalendar\Widgets\Concerns;

trait InteractsWithInitialView
{
    public function getInitialView(): string
    {
        return session("fullcalendar-default-view-{$this->getName()}", 'timeGridDay');
    }

    public function setInitialView(string $view): void
    {
        session()->put("fullcalendar-default-view-{$this->getName()}", $view);
    }
}
