<?php

namespace App\DTO\CorrosionLoopGroup;

use App\Http\Requests\CorrosionLoopGroup\UpdateCorrosionLoopGroupRequest;

class UpdateCorrosionLoopGroupDTO
{
    public function __construct(
        public readonly string $clGroup_name,
        public readonly string $clGroup_componentId,
    ) {
    }

    public static function fromRequest(UpdateCorrosionLoopGroupRequest $request): self
    {
        return new self(
            clGroup_name: $request->validated('clGroup_name'),
            clGroup_componentId: $request->validated('clGroup_componentId'),
        );
    }

    public function build(): array
    {
        $arr = [
            'clGroup_name' => $this->clGroup_name,
            'clGroup_componentId' => $this->clGroup_componentId,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
