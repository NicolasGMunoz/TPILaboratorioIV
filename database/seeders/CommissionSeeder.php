use Illuminate\Database\Seeder;
use App\Models\Commission;

class CommissionSeeder extends Seeder
{
    public function run()
    {
        $commissions = [
            ['aula' => '101', 'horario' => '8:00 - 10:00', 'course_id' => 1],
            ['aula' => '102', 'horario' => '10:00 - 12:00', 'course_id' => 2],
        ];

        foreach ($commissions as $commission) {
            Commission::create($commission);
        }
    }
}
