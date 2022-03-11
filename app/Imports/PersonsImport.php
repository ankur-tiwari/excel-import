<?php

namespace App\Imports;

use App\Models\Person;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PersonsImport implements ToCollection, WithHeadingRow,WithValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            $data=[
                'first_name'=>$row['first_name'],
                'last_name'=>$row['last_name'],
                'email'=>$row['email'],
                'person_prefix'=>$row['person_prefix'],
                'status'=> $row['status']
            ];
            Person::create($data);
        }
    }

    public function rules(): array
    {
        return[
            'first_name'=>'required',
            'last_name'=>'required',
            'email_address'=>'required|unique:persons,email',
        ];
    }
}
