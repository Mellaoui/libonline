<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Category;
use App\Models\Book;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCategories = Category::count();
        $totalBooks = Book::count();
        $uniqueAuthors = Book::distinct('author')->count('author');
        $averageBooksPerCategory = $totalBooks > 0 ? round($totalBooks / $totalCategories, 2) : 0;

        return [
            Stat::make('Total Categories', $totalCategories),
            Stat::make('Total Books', $totalBooks),
            Stat::make('Unique Authors', $uniqueAuthors),
            Stat::make('Average Books per Category', $averageBooksPerCategory),
        ];
    }
}
