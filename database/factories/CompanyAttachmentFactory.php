<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CompanyAttachment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyAttachment>
 */
class CompanyAttachmentFactory extends Factory
{
    protected $model = CompanyAttachment::class;

    public function definition()
    {
        return [
            'filename' => $this->faker->word . '.pdf',
        ];
    }
}
