public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('apellidos');
        $table->string('email')->unique();
        $table->string('password');
        $table->date('fecha_nacimiento');
        $table->string('telefono', 20);
        $table->string('direccion');
        $table->string('rol')->comment('consultora, cliente o almacenista');
        $table->string('imagen')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });
}
