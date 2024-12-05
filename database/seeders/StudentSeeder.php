use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['name' => 'Carlos López', 'email' => 'carlos.lopez@example.com'],
            ['name' => 'María González', 'email' => 'maria.gonzalez@example.com'],
            ['name' => 'Ana Pérez', 'email' => 'ana.perez@example.com'],
            ['name' => 'Juan Rodríguez', 'email' => 'juan.rodriguez@example.com'],
            ['name' => 'Lucía Fernández', 'email' => 'lucia.fernandez@example.com'],
            ['name' => 'Pedro Martínez', 'email' => 'pedro.martinez@example.com'],
            ['name' => 'Sofía Torres', 'email' => 'sofia.torres@example.com'],
            ['name' => 'Luis Ramírez', 'email' => 'luis.ramirez@example.com'],
            ['name' => 'Isabel García', 'email' => 'isabel.garcia@example.com'],
            ['name' => 'Jorge Sánchez', 'email' => 'jorge.sanchez@example.com'],
            ['name' => 'Paula Castillo', 'email' => 'paula.castillo@example.com'],
            ['name' => 'Andrés Morales', 'email' => 'andres.morales@example.com'],
            ['name' => 'Claudia Vega', 'email' => 'claudia.vega@example.com'],
            ['name' => 'Roberto Ruiz', 'email' => 'roberto.ruiz@example.com'],
            ['name' => 'Valeria Herrera', 'email' => 'valeria.herrera@example.com'],
            ['name' => 'Miguel Aguilar', 'email' => 'miguel.aguilar@example.com'],
            ['name' => 'Laura Navarro', 'email' => 'laura.navarro@example.com'],
            ['name' => 'Gabriel Ortiz', 'email' => 'gabriel.ortiz@example.com'],
            ['name' => 'Natalia Blanco', 'email' => 'natalia.blanco@example.com'],
            ['name' => 'Enrique Méndez', 'email' => 'enrique.mendez@example.com'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
