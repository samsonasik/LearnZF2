<?php

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace LearnZF2CaptchaTest\Form;

use PHPUnit_Framework_TestCase;

/**
 * @author Abdul Malik Ikhsan <samsonasik@gmail.com>
 */
class CaptchaForm extends PHPUnit_Framework_TestCase
{
    /** @var CaptchaForm */
    protected $form;

    public function setUp()
    {
        $this->form = new self();
    }

    public function testInit()
    {
        $this->form->init();
    }

    public function testInstanceOfFormEventManagerAndInputFilterProvider()
    {
        $this->assertInstanceOf('Zend\Form\Form', $this->form);
        $this->assertInstanceOf('Zend\InputFilter\InputFilterProviderInterface', $this->form);
    }

    public function testGetInputFilterSpecification()
    {
        $this->assertInternalType('array', $this->form->getInputFilterSpecification());
    }
}
