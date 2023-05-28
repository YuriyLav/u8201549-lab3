<?php

use App\Domain\Companies\Models\Company;

uses(Tests\TestCase::class);

test('get', function () {
    $company = Company::factory()->create();
    $response = $this->getJson("/api/v1/companies/{$company->id}");
    $response->assertStatus(200)
    ->assertJsonPath('data.id', $company->id)
    ->assertJsonPath('data.name', $company->name)
    ->assertJsonPath('data.address', $company->address);
});

test('create', function () {
    $attributes = Company::factory()->make();
    $response = $this->postJson('/api/v1/companies', $attributes->attributestoArray());
    $response->assertStatus(201);
    $this->assertDatabaseHas('companies', $attributes->attributestoArray());
});

test('delete', function () {
    $company = Company::factory()->create();
    $response = $this->deleteJson("/api/v1/companies/{$company->id}");
    $response->assertStatus(200)->assertJsonPath('data', null);
});

test('patch', function () {
    $company = Company::factory()->create();
    $newName = 'Name';
    $newAddress = 'Address';
    $response = $this->patchJson("/api/v1/companies/{$company->id}", [
        'name' => $newName,
        'address' => $newAddress,
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $company->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.address', $newAddress);
});

test('replace', function () {
    $company = Company::factory()->create();
    $newName = 'Name';
    $newAddress = 'Address';
    $response = $this->putJson("/api/v1/companies/{$company->id}", [
        'name' => $newName,
        'address' => $newAddress,
    ]);
    $response->assertStatus(200)
        ->assertJsonPath('data.id', $company->id)
        ->assertJsonPath('data.name', $newName)
        ->assertJsonPath('data.address', $newAddress);
});