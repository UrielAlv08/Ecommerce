<?php

declare(strict_types=1);

namespace JMS\Serializer\Tests\Fixtures\Doctrine\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BlogPostWithEmbedded
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Embedded(class="BlogPostSeo", columnPrefix="seo_")
     */
    private $seo;
}
