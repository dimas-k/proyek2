<?php


namespace App\Services;


use App\Models\Paten;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class PatenQueryBuilder
{
    protected $query;

    public function __construct()
    {
        $this->query = Paten::query();
    }
    public function getIdUser()
    {
        $this->query->where('user_id', Auth::user()->id);
        return $this;
    }
    public function getInstitusi($institusi)
    {
        $this->query->where('institusi', $institusi);
        return $this;
    }
    
    public function get()
    {
        return $this->query->get();
    }
}
