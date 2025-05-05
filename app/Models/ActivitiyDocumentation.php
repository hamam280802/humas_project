<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiyDocumentation extends Model
{
    use HasFactory;

    protected $table = 'activity_documentation';

    protected $fillable = [
        'tanggal',
        'fungsi_tim',
        'nama_kegiatan',
        'link_asset',
        'link_vo_script',
        'link_cover',
        'jenis_kegiatan',
        'link_ig',
        'link_youtube',
        'link_bps_news',
        'link_eksport',
    ];
}
