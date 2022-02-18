<?php


namespace Mindbox\DTO\V3\Responses;

use Mindbox\DTO\DTOCollection;

/**
 * Class PlaceholderResponseCollection
 *
 * @package Mindbox\DTO\V3\Responses
 */
class PlaceholderResponseCollection extends DTOCollection
{
    /**
     * @var string �������� ��������� ��������� ��� ���������� ��������� xml.
     */
    protected static $collectionItemsName = PlaceholderResponseDTO::class;

    /**
     * @var string �������� �������� ��� ���������� ��������� xml.
     */
    protected static $xmlName = 'placeHolders';
}
