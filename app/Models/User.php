<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;

    public function accomodationStaff(): HasMany
    {
        return $this->hasMany(AccomodationStaff::class);
    }

    public function boundedConcreteAreaLMP(): HasMany
    {
        return $this->hasMany(BoundedConcreteAreaLMP::class);
    }

    public function bulkPlantCementing(): HasMany
    {
        return $this->hasMany(BulkPlantCementing::class);
    }

    public function cargodoringService(): HasMany
    {
        return $this->hasMany(CargodoringService::class);
    }

    public function concreteRoofedShelter(): HasMany
    {
        return $this->hasMany(ConcreteRoofedShelter::class);
    }

    public function industrialSupplyForBoat(): HasMany
    {
        return $this->hasMany(IndustrialSupplyForBoat::class);
    }

    public function officeBuilding(): HasMany
    {
        return $this->hasMany(OfficeBuilding::class);
    }

    public function openYardArea(): HasMany
    {
        return $this->hasMany(OpenYardArea::class);
    }

    public function personnelMeal(): HasMany
    {
        return $this->hasMany(PersonnelMeal::class);
    }

    public function singleTonnageLiftingCargodoringInterStorage(): HasMany
    {
        return $this->hasMany(SingleTonnageLiftingCargodoringInterStorage::class);
    }

    public function stevedoringService(): HasMany
    {
        return $this->hasMany(StevedoringService::class);
    }

    public function temporaryWasteArea(): HasMany
    {
        return $this->hasMany(TemporaryWasteArea::class);
    }

    public function vesselBerthingOperation(): HasMany
    {
        return $this->hasMany(VesselBerthingOperation::class);
    }

    public function vesselBerthingStandby(): HasMany
    {
        return $this->hasMany(VesselBerthingStandby::class);
    }

    public function warehouseHardRoofCovered(): HasMany
    {
        return $this->hasMany(WarehouseHardRoofCovered::class);
    }

    public function wharfageBulk(): HasMany
    {
        return $this->hasMany(WharfageBulk::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
