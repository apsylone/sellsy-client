<?php

/**
 * Sellsy Client.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 * @license     http://teknoo.software/sellsy-client/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 *
 * @version     0.8.0
 */

namespace Teknoo\Sellsy\Client\Collection;

use Teknoo\Sellsy\Client\Client;

/**
 * Interface CollectionGeneratorInterface
 * Interface to implement Collection generator used by Sellsy Client to build collection of method.
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 * @license     http://teknoo.software/sellsy-client/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */
interface CollectionGeneratorInterface
{
    /**
     * Generate a new collection object to manage the Sellsy api's methods.
     *
     * @param Client $client
     * @param string $collectionName
     *
     * @return Collection
     */
    public function getCollection(Client $client, $collectionName);
}
