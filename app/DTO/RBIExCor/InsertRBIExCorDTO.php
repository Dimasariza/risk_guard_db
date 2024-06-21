<?php

namespace App\DTO\RBIExCor;

use App\Http\Requests\RBIExCor\CreateRBIExCorRequest;
use Illuminate\Support\Str;

class InsertRBIExCorDTO
{
    public function __construct(
        public readonly string $item_idItem,
        public readonly string $item_tagOfItem,
        public readonly string $item_nameOfItem,
    ) {
    }

    public static function fromRequest(CreateRBIExCorRequest $request): self
    {
        return new self(
            item_idItem: Str::random(9),
            item_tagOfItem: $request->validated('item_tagOfItem'),
            item_nameOfItem: $request->validated('item_nameOfItem'),
        );
    }

    public function build(): array
    {
        return [
            'item_idItem' => $this->item_idItem,
            'item_tagOfItem' => $this->item_tagOfItem,
            'item_nameOfItem' => $this->item_nameOfItem,
        ];
    }
}
