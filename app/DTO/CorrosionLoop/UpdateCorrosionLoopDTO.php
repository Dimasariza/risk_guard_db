<?php

namespace App\DTO\CorrosionLoop;

use App\Http\Requests\CorrosionLoop\UpdateCorrosionLoopRequest;

class UpdateCorrosionLoopDTO
{
    public function __construct(
        public readonly string $cl_name,
        public readonly string $cl_fileId,
    ) {
    }

    public static function fromRequest(UpdateCorrosionLoopRequest $request): self
    {
        return new self(
            cl_name: $request->validated('cl_name'),
            cl_fileId: $request->validated('cl_fileId'),
        );
    }

    public function build(): array
    {
        $arr = [
            'cl_name' => $this->cl_name,
            'cl_fileId' => $this->cl_fileId,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
