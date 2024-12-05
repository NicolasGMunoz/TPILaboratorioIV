use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    public function run()
    {
        $professors = ['John Doe', 'Jane Smith', 'Albert Einstein'];

        foreach ($professors as $professor) {
            Professor::create(['name' => $professor]);
        }
    }
}
