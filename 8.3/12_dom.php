<?php

// 1. DOMElement::getAttributeNames()
$dom = new DOMDocument();
$dom->loadXML('<html xmlns:some="some:ns" some:test="a" test2="b"/>');
var_dump($dom->documentElement->getAttributeNames()); // ['xmlns:some', 'some:test', 'test2']

// 2. DOMElement::insertAdjacentElement()
// 3. DOMElement::insertAdjacentText()
// $dom = new DOMDocument();
/*$dom->loadXML('<?xml version="1.0"?><container><p>foo</p></container>');*/
// $container = $dom->documentElement;
// $p = $container->firstElementChild;
//
// $p->insertAdjacentElement(where: 'beforebegin', element: $dom->createElement('A'));
// echo $dom->saveXML(); // <container><A/><p>foo</p></container>

// 4. DOMElement::toggleAttribute()
// $dom = new DOMDocument();
/*$dom->loadXML('<?xml version="1.0"?><container selected=""/>');*/
//
// var_dump($dom->documentElement->toggleAttribute(qualifiedName: 'selected'));
// echo $dom->saveXML() . PHP_EOL; // <container/>
//
// var_dump($dom->documentElement->toggleAttribute(qualifiedName: 'selected', force: true));
// echo $dom->saveXML(); // <container selected=""/>

// 5. DOMNode::contains()
// $dom = new DOMDocument();
// $dom->loadXML(<<<XML
// <!DOCTYPE html>
// <html>
//    <body>
//        <main>
//            <p>Hello, world!</p>
//        </main>
//    </body>
// </html>
// XML);
//
// $xpath = new DOMXPath($dom);
// $main = $xpath->query("//main")[0];
//
// var_dump($dom->documentElement->contains(other: $main)); // true

// 6. DOMNode::getRootNode()
// $dom = new DOMDocument();
/*$dom->loadXML('<?xml version="1.0"?><html><body/></html>');*/
//
// var_dump($dom->documentElement->firstElementChild->getRootNode() === $dom); // true

// 7. DOMNode::isEqualNode()
// $dom1 = (new DOMDocument())->createElement(localName: 'h1', value: 'Hello World!');
// $dom2 = (new DOMDocument())->createElement(localName: 'h1', value: 'Hello World!');
//
// var_dump($dom1->isEqualNode(otherNode: $dom2)); // true

// 8. DOMParentNode::replaceChildren()
// $dom = new DOMDocument();
// $dom->loadHTML('<!DOCTYPE html><html><p>hi</p> test <p>hi2</p></html>');
//
// $dom->documentElement->replaceChildren('foo', $dom->createElement('p'), 'bar');
// echo $dom->saveXML(); // <html>foo<p/>bar</html>
