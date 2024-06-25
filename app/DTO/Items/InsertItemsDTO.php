<?php

namespace App\DTO\Items;

use App\Http\Requests\Items\CreateItemRequest;
use Illuminate\Support\Str;

class InsertItemsDTO
{
    public function __construct(
        public readonly string $item_id,
        public readonly string $item_tagOfItem,
        public readonly string $item_nameOfItem,
        public readonly string $item_userId,
    ) {
    }

    public static function fromRequest(CreateItemRequest $request): self
    {
        return new self(
            item_id: Str::random(9),
            item_tagOfItem: $request->validated('item_tagOfItem'),
            item_nameOfItem: $request->validated('item_nameOfItem'),
            item_userId: $request->validated('item_userId'),
        );
    }

    public function build(): array
    {
        return [
            'item_id' => $this->item_id,
            'item_tagOfItem' => $this->item_tagOfItem,
            'item_nameOfItem' => $this->item_nameOfItem,
            'item_userId' => $this->item_userId,
        ];
    }
}
