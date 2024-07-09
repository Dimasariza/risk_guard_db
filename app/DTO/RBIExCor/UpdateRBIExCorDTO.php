<?php

namespace App\DTO\RBIExCor;

use App\Http\Requests\RBIExCor\UpdateRBIExCorRequest;

class UpdateRBIExCorDTO
{
    public function __construct(
        public readonly ?string $rbiExCor_equationDesign = null,
        public readonly ?string $rbiExCor_interface = null,
        public readonly ?string $rbiExCor_tMinMM = null,
        public readonly ?string $rbiExCor_tMinInch = null,
    ) {
    }

    public static function fromRequest(UpdateRBIExCorRequest $request): self
    {
        return new self(
            rbiExCor_equationDesign: $request->validated("rbiExCor_equationDesign"),
            rbiExCor_interface: $request->validated("rbiExCor_interface"),
            rbiExCor_tMinMM: $request->validated("rbiExCor_tMinMM"),
            rbiExCor_tMinInch: $request->validated("rbiExCor_tMinInch"),
        );
    }

    public function build(): array
    {
        $arr = [
            "rbiExCor_equationDesign" => $this->rbiExCor_equationDesign,
            "rbiExCor_interface" => $this->rbiExCor_interface,
            "rbiExCor_tMinMM" => $this->rbiExCor_tMinMM,
            "rbiExCor_tMinInch" => $this->rbiExCor_tMinInch,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
