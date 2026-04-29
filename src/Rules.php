<?php declare(strict_types=1);
/*
 * This file is part of Webisters Validation Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Validation;

/**
 * Class Rules.
 *
 * @package validation
 */
class Rules extends BaseRules
{
    use Traits\Validator;
    use Traits\FilesValidator;
}
