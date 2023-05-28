<?php

use App\Domain\Departments\Models\Department;

uses(Tests\TestCase::class);

test('get', function () {
    $department = Department::factory()->create();
    $response = $this->getJson("/api/v1/departments/{$department->id}");
    $response->assertStatus(200)
    ->assertJsonPath('data.id', $department->id)
    ->assertJsonPath('data.name', $department->name)
    ->assertJsonPath('data.company_id', $department->company_id);
});

test('create', function () {
    $attributes = Department::factory()->make();
    $response = $this->postJson('/api/v1/departments', $attributes->attributestoArray());
    $response->assertStatus(201);
    $this->assertDatabaseHas('departments', $attributes->attributestoArray());
});

test('delete', function () {
    $department = Department::factory()->create();
    $response = $this->deleteJson("/api/v1/departments/{$department->id}");
    $response->assertStatus(200)->assertJsonPath('data', null);
});

test('patch', function () {
    $department = Department::factory()->create();
    $newName = 'Name';
    $newCompany_id = 10;
    $response = $this->patchJson("/api/v1/departments/{$department->id}", [
        'name' => $newName,
        'company_id' => $newCompany_id,
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $department->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.company_id', $newCompany_id);
});

test('replace', function () {
    $department = Department::factory()->create();
    $newName = 'Name';
    $newCompany_id = 10;
    $response = $this->putJson("/api/v1/departments/{$department->id}", [
        'name' => $newName,
        'company_id' => $newCompany_id,
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $department->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.company_id', $newCompany_id);
});