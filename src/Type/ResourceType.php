<?php declare(strict_types = 1);

namespace PHPStan\Type;

use PHPStan\TrinaryLogic;

class ResourceType implements Type
{

	use JustNullableTypeTrait;

	public function describe(): string
	{
		return 'resource';
	}

	public function canAccessProperties(): bool
	{
		return false;
	}

	public function canCallMethods(): bool
	{
		return false;
	}

	public function isCallable(): TrinaryLogic
	{
		return TrinaryLogic::createNo();
	}

	public static function __set_state(array $properties): Type
	{
		return new self();
	}

}
