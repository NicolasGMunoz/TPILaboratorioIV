use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = ['Matemáticas', 'Historia', 'Biología', 'Química', 'Inglés'];

        foreach ($subjects as $subject) {
            Subject::create(['name' => $subject]);
        }
    }
}
