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
        public readonly string $cl_userId,
    ) {
    }

    public static function fromRequest(CreateCorrosionLoopRequest $request): self
    {
        return new self(
            cl_name: $request->validated('cl_name'),
            cl_fileId: $request->validated('cl_fileId'),
            cl_userId: $request->validated('cl_userId'),
        );
    }

    public function build(): array
    {
        return [
            'cl_id' => Str::random(9),
            'cl_name' => $this->cl_name,
            'cl_fileId' => $this->cl_fileId,
            'cl_userId' => $this->cl_userId,
        ];
    }
}
