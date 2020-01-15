<?php
namespace App\Exports;
use App\Blog;
use Maatwebsite\Excel\Concerns\FromCollection;

class BlogReport implements FromCollection
{
    public function collection()
    {
        return Blog::all();
    }
}
