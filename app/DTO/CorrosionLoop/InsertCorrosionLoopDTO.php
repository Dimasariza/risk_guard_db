<?php

namespace App\DTO\CorrosionLoop;

use App\Http\Requests\CorrosionLoop\CreateCorrosionLoopRequest;
use App\Http\Requests\Equipments\CreateEquipmentRequest;
use Illuminate\Support\Str;

class InsertCorrosionLoopDTO
{
    public function __construct(
        public readonly string $cl_name,
        public readonly string $cl_fileId,
    ) {
    }

    public static function fromRequest(CreateCorrosionLoopRequest $request): self
    {
        return new self(
            cl_name: $request->validated('cl_name'),
            cl_fileId: $request->validated('cl_fileId'),
        );
    }

    public function build(): array
    {
        return [
            'cl_id' => Str::random(9),
            'cl_name' => $this->cl_name,
            'cl_fileId' => $this->cl_fileId,
        ];
    }
}
