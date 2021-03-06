<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dex.proto

namespace Binance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * please note the field name is the JSON name.
 * msg
 *
 * Generated from protobuf message <code>Binance.Send</code>
 */
class Send extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Input inputs = 1;</code>
     */
    private $inputs;
    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Output outputs = 2;</code>
     */
    private $outputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Binance\Send\Input[]|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type \Binance\Send\Output[]|\Google\Protobuf\Internal\RepeatedField $outputs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Input inputs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Input inputs = 1;</code>
     * @param \Binance\Send\Input[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Binance\Send\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Output outputs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .Binance.Send.Output outputs = 2;</code>
     * @param \Binance\Send\Output[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Binance\Send\Output::class);
        $this->outputs = $arr;

        return $this;
    }

}

