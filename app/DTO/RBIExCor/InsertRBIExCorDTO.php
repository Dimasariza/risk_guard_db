<?php

namespace App\DTO\RBIExCor;

use App\Http\Requests\RBIExCor\CreateRBIExCorRequest;
use Illuminate\Support\Str;

class InsertRBIExCorDTO
{
    public function __construct(
        public readonly string $rbiExCor_componentId,
        public readonly ?string $rbiExCor_equationDesign = null,
        public readonly ?string $rbiExCor_interface = null,
        public readonly ?string $rbiExCor_tMinMM = null,
        public readonly ?string $rbiExCor_tMinInch = null,
    ) {
    }

    public static function fromRequest(CreateRBIExCorRequest $request): self
    {
        return new self(
            rbiExCor_componentId: $request->validated("rbiExCor_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "rbiExCor_id" => Str::random(9),
            "rbiExCor_componentId" => $this->rbiExCor_componentId,
            "rbiExCor_equationDesign" => $this->rbiExCor_equationDesign,
            "rbiExCor_interface" => $this->rbiExCor_interface,
            "rbiExCor_tMinMM" => $this->rbiExCor_tMinMM,
            "rbiExCor_tMinInch" => $this->rbiExCor_tMinInch,
        ];
    }
}
