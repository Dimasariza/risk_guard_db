<?php

namespace App\DTO\RBIExCor;

use App\Http\Requests\RBIExCor\UpdateRBIExCorRequest;

class UpdateRBIExCorDTO
{
    public function __construct(
        public readonly string $item_tagOfItem,
        public readonly string $item_nameOfItem,
    ) {
    }

    public static function fromRequest(UpdateRBIExCorRequest $request): self
    {
        return new self(
            item_tagOfItem: $request->validated('item_tagOfItem'),
            item_nameOfItem: $request->validated('item_nameOfItem')
        );
    }

    public function build(): array
    {
        $arr = [
            'item_tagOfItem' => $this->item_tagOfItem,
            'item_nameOfItem' => $this->item_nameOfItem,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
