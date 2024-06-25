<?php

namespace App\DTO\Items;

use App\Http\Requests\Items\UpdateItemRequest;

class UpdateItemsDTO
{
    public function __construct(
        public readonly string $item_tagOfItem,
        public readonly string $item_nameOfItem,
        public readonly string $item_userId,
    ) {
    }

    public static function fromRequest(UpdateItemRequest $request): self
    {
        return new self(
            item_tagOfItem: $request->validated('item_tagOfItem'),
            item_nameOfItem: $request->validated('item_nameOfItem'),
            item_userId: $request->validated('item_userId')
        );
    }

    public function build(): array
    {
        $arr = [
            'item_tagOfItem' => $this->item_tagOfItem,
            'item_nameOfItem' => $this->item_nameOfItem,
            'item_userId' => $this->item_userId,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
