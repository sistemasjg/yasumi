<?php
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2017 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author José Romero <sistemasjgf@gmail.com>
 */

namespace Yasumi\Provider;

use DateInterval;
use DateTime;
use DateTimeZone;
use Yasumi\Holiday;

/**
 * Provider for all holidays in Panama.
 */
class Panama extends AbstractProvider
{
    public  $locale = 'es_ES';

    use CommonHolidays, ChristianHolidays;

    /**
     * Code to identify this Holiday Provider. Typically this is the ISO3166 code corresponding to the respective
     * country or sub-region.
     */
    const ID = 'PA';

    /**
     * Initialize holidays for Panama.
     *
     * @throws \InvalidArgumentException
     * @throws \Yasumi\Exception\UnknownLocaleException
     */
    public function initialize()
    {
        $this->timezone = 'America/Panama';
        $this->locale = 'es_ES';
        // Add common holidays
        $this->addHoliday($this->newYearsDay($this->year, $this->timezone, $this->locale));
        $this->addHoliday($this->internationalWorkersDay($this->year, $this->timezone, $this->locale));

        // Add Christian holidays
        $this->addHoliday($this->christmasDay($this->year, $this->timezone, $this->locale));
        $this->addHoliday($this->goodFriday($this->year, $this->timezone, $this->locale));
        /**
         *  Dia de las Madres
         *
         * 
         *
         */
        $this->addHoliday(new Holiday(
            'mothersDay',
            ['es_ES' => 'Dia de las Madres'],
            new DateTime("$this->year-12-08", new DateTimeZone($this->timezone)),
            $this->locale
        ));

        /**
         *  Dia de los Martires
         *
         * 
         *
         */

        $this->addHoliday(new Holiday(
            'martiresDay',
            ['es_ES' => 'Dia de los Mártires'],
            new DateTime("$this->year-01-09", new DateTimeZone($this->timezone)),
            $this->locale
        ));

        /**
         *  Separación de Panama de Colombia
         *
         * 
         *
         */

        $this->addHoliday(new Holiday(
            'separacionColombiaDay',
            ['es_ES' => 'Separación de Panama de Colombia'],
            new DateTime("$this->year-11-03", new DateTimeZone($this->timezone)),
            $this->locale
        ));


        /**
         *  Independencia de Panama de España
         *
         * 
         *
         */

        $this->addHoliday(new Holiday(
            'independenciaEspanaDay',
            ['es_ES' => 'Independencia de España'],
            new DateTime("$this->year-11-28", new DateTimeZone($this->timezone)),
            $this->locale
        ));


    }
}
