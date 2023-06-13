<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mainchart
 *
 * @property int $main_charts_id
 * @property string $chart_name_ar
 * @property string $chart_name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart whereChartNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart whereChartNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart whereMainChartsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mainchart whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MainChart extends Model
{
    //*here
    use HasFactory;
    protected $table = 'main_charts';
    protected $primaryKey = 'main_charts_id';



    public function ChartAccountDetail()
    {
        return $this->hasMany(ChartAccountDetails::class);
    }
}
