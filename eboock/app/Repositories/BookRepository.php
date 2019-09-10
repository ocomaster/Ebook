<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version September 3, 2019, 3:12 pm UTC
*/

class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'review',
        'cover',
        'author_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
