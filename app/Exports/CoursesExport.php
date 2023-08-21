<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CoursesExport implements FromCollection, WithStrictNullComparison, WithCustomStartCell, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Course::getCourses());
        // return Course::all();
    }

    /**
     * @return string
     */
    public function startCell(): string
    {
        return 'A1';
    }

    public function headings(): array
    {
        return [
            // 'ID',
            'Title',
            // 'Caption',
            'Description',
            'Url',
            'Duration in minutes',
            'Status',
            // 'Slug',
            'User',
            'Level',
            'Category',
            //'Precio',
            'Type',
            'Modality',
            //'Creation date',
            //'Modification date'
        ];
    }
}
