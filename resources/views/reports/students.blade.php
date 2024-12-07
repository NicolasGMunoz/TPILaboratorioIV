<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Estudiantes Inscritos</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Reporte de Estudiantes Inscritos</h1>
    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Email</th>
                <th>Cursos</th>
                <th>Comisiones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nombre }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @foreach ($student->courses as $course)
                            {{ $course->nombre }}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($student->courses as $course)
                            @foreach ($course->commissions as $commission)
                                {{ $commission->nombre }}<br>
                            @endforeach
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
