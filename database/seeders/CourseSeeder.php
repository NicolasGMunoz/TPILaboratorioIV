use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            ['name' => 'Matemáticas Avanzadas', 'subject_id' => 1],
            ['name' => 'Historia Moderna', 'subject_id' => 2],
            ['name' => 'Biología Molecular', 'subject_id' => 3],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
