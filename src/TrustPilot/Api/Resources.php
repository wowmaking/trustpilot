<?php
/*
 * This file is part of the TrustPilot library.
 *
 * (c) Graphem Solutions <info@graphem.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TrustPilot\Api;

/**
 * @author Graphem Solutions <info@graphem.ca>
 */

use TrustPilot\TrustPilot;

class Resources extends AbstractApi{

    /**
     * Get stars image
     * https://developers.trustpilot.com/resources-api#get-the-star-image-resources
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getStarsImage($stars, $data)
    {
        return json_decode(
            $this->api->get('resources/images/stars/'. $stars,
                            ['query' =>
                                [
                                    'apikey' => $data['apikey']
                                ]
                            ]
            ));
    }
    
}
