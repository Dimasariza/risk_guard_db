<?php

namespace App\DTO\CorrosionLoopGroup;

use App\Http\Requests\CorrosionLoopGroup\CreateCorrosionLoopGroupRequest;
use Illuminate\Support\Str;

class InsertCorrosionLoopGroupDTO
{
    public function __construct(
        public readonly string $clGroup_name,
        public readonly string $clGroup_clId,
        public readonly string $clGroup_componentId,
    ) {
    }

    public static function fromRequest(CreateCorrosionLoopGroupRequest $request): self
    {
        return new self(
            clGroup_name: $request->validated('clGroup_name'),
            clGroup_clId: $request->validated('clGroup_clId'),
            clGroup_componentId: $request->validated('clGroup_componentId'),
        );
    }

    public function build(): array
    {
        return [
            'clGroup_clId' => Str::random(9),
            'clGroup_name' => $this->clGroup_name,
            'clGroup_clId' => $this->clGroup_clId,
            'clGroup_componentId' => $this->clGroup_componentId,
        ];
    }
}
