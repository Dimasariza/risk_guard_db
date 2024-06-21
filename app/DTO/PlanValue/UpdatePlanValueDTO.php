<?php

namespace App\DTO\Items;

use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;

class UpdatePlanValueDTO
{
    public function __construct(
        public readonly string $item_tagOfItem,
        public readonly string $item_nameOfItem,
    ) {
    }

    public static function fromRequest(UpdatePlanThinningRequest $request): self
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
