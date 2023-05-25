<?php

use App\Domain\Employees\Models\Employee;

uses(Tests\TestCase::class);

test('get', function () {
    $employee = Employee::factory()->create();
    $response = $this->getJson("/api/v1/employees/{$employee->id}");
    $response->assertStatus(200)
    ->assertJsonPath('data.id', $employee->id)
    ->assertJsonPath('data.name', $employee->name)
    ->assertJsonPath('data.email', $employee->email)
    ->assertJsonPath('data.department_id', $employee->department_id);
});

test('create', function () {
    $attributes = Employee::factory()->make();
    $response = $this->postJson('/api/v1/employees', $attributes->attributestoArray());
    $response->assertStatus(201);
    $this->assertDatabaseHas('employee', $attributes->attributestoArray());
});

test('delete', function () {
    $employee = Employee::factory()->create();
    $response = $this->deleteJson("/api/v1/employee/{$employee->id}");
    $response->assertStatus(200)->assertJsonPath('data', null);
});

test('patch', function () {
    $employee = Employee::factory()->create();
    $newName = 'Name';
    $newEmail = 'sfgihjd@mail.ru';
    $newDepartment_id = 19;
    $response = $this->patchJson("/api/v1/employees/{$employee->id}", [
        'name' => $newName,
        'department_id' => $newDepartment_id,
        'email' => $newEmail
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $employee->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.department_id', $newDepartment_id)
        ->assertJsonPath('data.email', $newEmail);
});

test('replace', function () {
    $employee = Employee::factory()->create();
    $newName = 'Name';
    $newEmail = 'sfdidfhhtgh@mail.ru';
    $newDepartment_id = 17;
    $response = $this->putJson("/api/v1/employees/{$employee->id}", [
        'name' => $newName,
        'department_id' => $newDepartment_id,
        'email' => $newEmail
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $employee->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.department_id', $newDepartment_id)
        ->assertJsonPath('data.email', $newEmail);
});