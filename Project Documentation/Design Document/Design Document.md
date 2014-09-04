      
Design Document
===============

Ready2Serve POS
===============


* [Table of contents]     
      * [Entity Relationship Diagram](#entity-relationship-diagram)
      * [Database Schema](#database-schema)
      * [Use Case Diagram](#use-case-diagram)
      * [High Level Use Cases](#high-level-use-cases)
       * [Use Case 1 (Authenticate User)](#use-case-1-authenticate-user)
       * [Use Case 2 (Place Order)](#use-case-2-place-order)
       * [Use Case 3 (Confirm Order)](#use-case-3-confirm-order)
       * [Use Case 4 (Cancel Order)](#use-case-4-cancel-order)
       * [Use Case 5 (Add order line Item)](#use-case-5-add-order-line-item)
       * [Use Case 6 (Edit order line Item)](#use-case-6-edit-order-line-item)
       * [Use Case 7 (Delete order line Item)](#use-case-7-delete-order-line-item)
       * [Use Case 8 (Manage Products)](#use-case-8-manage-products)
       * [Use Case 9 (Add Product)](#use-case-9-add-product)
       * [Use Case  10 (Update Product)](#use-case--10-update-product)
       * [Use Case 11 (Delete Product)](#use-case-11-delete-product)
       * [Use Case 12 (Edit Account Info)](#use-case-12-edit-account-info)
       * [Use Case 13 (View Orders)](#use-case-13-view-orders)
      * [Expanded Use Cases](#expanded-use-cases)
       * [Use Case 1 (Authenticate User)](#use-case-1-authenticate-user)
       * [Authenticate user Activity Diagram](#authenticate-user-activity-diagram)
       * [Use Case 2 (Place order)](#use-case-2-place-order)
       * [Place Order Activity Diagram](#place-order-activity-diagram)
       * [Use Case 3 (Confirm Order)](#use-case-3-confirm-order)
       * [Confirm Order Activity Diagram](#confirm-order-activity-diagram)
       * [Use Case 4 (Cancel Order)](#use-case-4-cancel-order)
       * [Cancel Order Activity Diagram](#cancel-order-activity-diagram)
       * [Use Case 5 (Add Order Line Item )](#use-case-5-add-order-line-item-)
       * [Add Order Line Item Activity Diagram](#add-order-line-item-activity-diagram)
       * [Use Case 6 (Edit Order Line Item )](#use-case-6-edit-order-line-item-)
       * [Edit Order Line Item Activity Diagram](#edit-order-line-item-activity-diagram)
       * [Use Case 7 (Delete Order Line Item )](#use-case-7-delete-order-line-item-)
       * [Delete Order Line Item Activity Diagram](#delete-order-line-item-activity-diagram)
       * [Use Case 8 (Manage Products)](#use-case-8-manage-products)
       * [Manage Products Activity Diagram](#manage-products-activity-diagram)
       * [Use Case 9 (Add Products)](#use-case-9-add-products)
       * [Add Products Activity Diagram](#add-products-activity-diagram)
       * [Use Case 10 (Update/Edit Products)](#use-case-10-update/edit-products)
       * [Update/Edit Product Activity Diagram](#update/edit-product-activity-diagram)
       * [Use Case 11 (Delete Products)](#use-case-11-delete-products)
       * [Delete Products Activity Diagram](#delete-products-activity-diagram)
       * [Use Case 12 (Edit Account Info)](#use-case-12-edit-account-info)
       * [Edit Account Info Activity Diagram](#edit-account-info-activity-diagram)
       * [Use Case 13 (View Orders)](#use-case-13-view-orders)
       * [View Orders Activity Diagram](#view-orders-activity-diagram)



## Entity Relationship Diagram##

![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Extended-ERD.png)

## Database Schema ##
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Database%20Schema%20Diagram.png)

## Use Case Diagram ##
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Usecase%20Diagram.png)

## High Level Use Cases ##

##Use Case #1 Authenticate User

**Actors:** Administrator, Salesperson 

**Type:** Primary

**Description:** All above mentioned actors will login to system after validating their unique username and password.

### Use Case #2 (Place Order)
**Actor:** Salesperson

**Type:** Primary and essential

**Description:** Salesperson will place the order on the system by adding the items or deals asked by the customer in his/her specific order. Moreover salesperson can delete an item or deal, edit an existing order line item in order and can eventually confirms or cancels the order. 

###Use Case #3 (Confirm Order) 
**Actor:** System

**Type:** Secondary and essential

**Description:** While placing the order the salesperson selects to confirm order. After this salesperson will not be able to edit the order. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to confirm his/her order during place order use case.

###Use Case #4 (Cancel Order)
**Actors:**  System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to cancel order. After this current order will be cancelled or removed. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to confirm his/her order in place order use case.

### Use Case #5 (Add order line Item)
**Actors:** System

**Type:** Secondary and essential

**Description:** While placing the order the salesperson selects to add an order line item that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to add an item/deal in a particular order.

###Use Case #6 (Edit order line Item)
**Actors:** System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to edit an existing order line item in an order that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting to add an item/deal in a particular order.

###Use Case #7 (Delete order line Item)
**Actors:** System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to delete an existing order line item in an order that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting to add an item/deal in a particular order.

###Use Case #8 (Manage Products)
**Actors:** Administrator

**Type:** Primary and optional

**Description:** Admin can Add, Update/edit and delete products from the system. The initiator of this use case is administrator.

###Use Case #9 (Add Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can add a particular product. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case  #10 (Update Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can update or edit a particular product. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case #11 (Delete Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can delete a particular product from the system. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case #12 (Edit Account Info)
**Actors:** Administrator

**Type:** Primary and essential

**Description:** Admin or Salesperson can change their information. Initiator of this system can be any user (Salesperson or Admin). 

###Use Case #13 (View Orders)
**Actors:** Administrator

**Type:** Primary and essential

**Description:** Administrator can view the orders existing in the system. Administrator is the initiator of the system.


## Expanded Use Cases ##

###Use Case #1 (Authenticate User)

|                  | Authenticate the user| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `User (Administrator, Salesperson)` |
| **Stakeholders-and their Interests** | `Administrator , Salesperson`|
 ||`User: User wants to login to the system and use it`|
| **Pre-Condition** |`User must already be registered within the system.`|
| **Success Guarantee**| `1) User logged in successfully.`
||	`2) User granted access according to the type of user.` |
| **Main-Success Scenario** | `1.User starts the application.`|
||`2.User enters Username and Password.`|
||`3.User Presses Enter button.`|
||`4.User is logged in.`||
|||
| **Extensions (Alternative Flows)** |`3a. Login failed`
||`1. User entered invalid Username and Password`|
||`a.	User enters the correct Username and Password and goes to step 3.`||
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Authenticate user Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Authenticate%20User.png)

###Use Case #2 (Place order)

|                  | Place order| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `User ( Salesperson)` |
| **Stakeholders-and their Interests** | `Salesperson`|
 ||`User: User wants to place the order.`|
| **Pre-Condition** |`User must be logged in.`|
| **Success Guarantee**| `Order is placed or cancelled (Depending upon selection of user)`
|
| **Main-Success Scenario** | `1.User selects to place an order.`|
||`2.User gets a list of items/deals available in system.`|
||`3.User add an item/deal in order.`|
||`4.User confirms the order.`||
|||
| **Extensions (Alternative Flows)** |`3a. User edit/update an item in order.`
||`3b. User deletes an item in order.`|
||`4a. Salesperson cancels order`||
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Place Order Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Place%20Order.png)

###Use Case #3 (Confirm Order)

|                  | Confirm Order| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`System Goal`|
| **Primary Actor**| `User (Administrator, Salesperson)` |
| **Stakeholders-and their Interests** | `Salesperson`|
 ||`User: User wants to confirm the order that he/she is placing.`|
| **Pre-Condition** |`1.User must be logged in.`|
||`2.User must have opted/selected for Place order.`|
||`3.User must have added at least a single item/deal in order.`|
| **Success Guarantee**| `1) Order is placed and saved to database.`|
| **Main-Success Scenario** | `1.User selects to confirm the order`|
||`2.Order is confirmed and added to database`|
||`3.User is disabled to edit the order  again.`||
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Confirm Order Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Confirm%20Order.png)

###Use Case #4 (Cancel Order)

|                  | Cancel Order| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`System Goal`|
| **Primary Actor**| `•	User (Salesperson)` |
| **Stakeholders-and their Interests** | `•	Salesperson`|
 ||`User: User wants to cancel the order that he/she is placing.`|
| **Pre-Condition** |`User must be logged in as Salesperson`|
||`User must have opted/selected for Place order.`|
| **Success Guarantee**| ` •	Order is cancelled that was bering placed by the user. `|
| **Main-Success Scenario** | `1.	User selects to cancels the order.`|
||`2.	Order is cancelled.`|
||`3.	Main menu is displayed.`|
||
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Cancel Order Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Cancel%20Order.png)

###Use Case #5 (Add Order Line Item )

|                  | Add Order Line Item | 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `System` |
| **Stakeholders-and their Interests** | `Salesperson`|
 ||`User: User wants to add order line item in order.`|
| **Pre-Condition** |`•	User must be logged in as Salesperson.`|
||`•	User must have selected/opted Place Order.` |
| **Success Guarantee**| `•	Order line item is added in the Order that is being placed by the Salesperson.`
|
| **Main-Success Scenario** | `1.	User chooses a specific item/deal to add in order`|
||`2.	System adds the selected order line item in the order that is being placed.`|
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Add Order Line Item Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Add%20Order%20Line%20Item.png)

###Use Case #6 (Edit Order Line Item )

|                  | Edit Order Line Item | 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `System` |
| **Stakeholders-and their Interests** | `Salesperson`|
 ||`1)	User: User wants to edit an order line item from the order.`|
| **Pre-Condition** |`1) Salesperson must be logged in.`|
||`2) Salesperson must have selected/opted Place Order.`|
||`3) Salesperson must have added at least a single order line item in order before editing one.`|
| **Success Guarantee**| `•	The desired order line items are updated as per data entered by the salesperson.`|
| **Main-Success Scenario** | `1.	User chooses an item from order line item of order.`|
||`2.	System prompts the user to edit quantity of the order line item`|
||`3.	User enters new quantity`|
||`4.	Quantity of order line item is updated`||
||
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Edit Order Line Item Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Edit%20Order%20Line%20Item.png)

###Use Case #7 (Delete Order Line Item )

|                  | Delete Order Line Item | 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `System` |
| **Stakeholders-and their Interests** | `Salesperson`|
 ||`1)	User: User wants to delete an order line item from the order.`|
| **Pre-Condition** |`1) Salesperson must be logged in.`|
||2) `Salesperson must have selected/opted Place Order.`|
||3) `Salesperson must have added at least a single order line item in order before deleting one.`|
| **Success Guarantee**| `•	The desired order line items are delete from the order.`|
| **Main-Success Scenario** | `1.	User chooses an item from order line item of order.`|
||`2.	System prompts the user conform the deletion of the order line item`|
||`3.	User confirms the deletion of order line item.`|
||`4.	Order line item is deleted from order.`|||
|||
| **Extensions (Alternative Flows)** |**`3a. User cancels the deletion of order line item.`**|
||**`4a. Oder line item is not deleted from order.`**||
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Delete Order Line Item Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Delete%20Order%20Line%20Item.png)

###Use Case #8 (Manage Products)

|                  | Manage Products| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`Admin Goal`|
| **Primary Actor**| `User (Administrator)` |
| **Stakeholders-and their Interests** | `Administrator `|
 ||`User: User wants to manage any product (item/offer) from system`|
| **Pre-Condition** |`User must be login to the system as Admin.`
||`User must have opted/selected “manage products” options.`|
| **Success Guarantee**| `•User managed desired products (items/offers) successfully.`|
| **Main-Success Scenario** | `1.User selects to manage products.`|
||`2.User gets a list of products available in system.`|
||`3.User adds a product in system.`||
| **Extensions (Alternative Flows)** |**`3a.User edit/update an item in order.`**|
||**`3b. User deletes an item in order.`**|
|
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Manage Products Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Manage%20Products.png)

###Use Case #9 (Add Products)

|                  | Add Products| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`Admin Goal`|
| **Primary Actor**| `System (Initiator)` |
| **Stakeholders-and their Interests** | `Administrator `|
 ||`User: User wants to edit any product (item/offer) from system`|
| **Pre-Condition** |`1) User must be login to the system as Admin.`|
||`2) User must have selected/opted for Manage products`|
| **Success Guarantee**| `1. User added desired products (items/offers) successfully.`|
| **Main-Success Scenario** | `1. User selects the option “add products”.`|
||`2.	User selects one option from “add item” or “add offer”`|
||`3.	User selected add item.`|
||`4.	User adds price and the description of item to add item.`||
||`5.System prompts user to add any other item/deal.`|
|||
| **Extensions (Alternative Flows)** |`4a. User selected add offer option`|
||`5a. User adds price and the description of deal and items in the deal.`|
|
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####Add Products Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Add%20Products.png)

###Use Case #10 (Update/Edit Products)

|                  | Update/Edit Products| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`Admin Goal`|
| **Primary Actor**| `System` |
| **Stakeholders-and their Interests** | `Administrator`|
 ||`User: User wants to edit any product (item/offer) from system`|
| **Pre-Condition** |`User must be login to the system as Admin`|
||`User must have selected/opted for Manage products.`|
| **Success Guarantee**| `•User edited desired products (items/offers) successfully.`
||	`2) User granted access according to the type of user.` |
| **Main-Success Scenario** | `1.User selects the option “edit products”.`|
||`2.User selects the option “edit item” or “edit offer”`|
||`3.User has selected edit item`|
||`4.User edit the price and description of item to edit item`||
|||
| **Extensions (Alternative Flows)** |**`3a. User has selected edit offer.`**
||**`4a. User edits the price and description of deal. `**|
||**`5b. User edit items in an offer to edit offer`**||
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Update/Edit Product Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Edit%20Product.png)

###Use Case #11 (Delete Products)

|                  |Delete Products| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`Admin Goal`|
| **Primary Actor**| `System` |
| **Stakeholders-and their Interests** | `Administrator `|
 ||`User: User wants to delete any product (item/offer) from system`|
| **Pre-Condition** |`User must be login to the system as Admin.`|
||`User must have selected/opted for Manage products.`|
| **Success Guarantee**| `• User deleted desired products (items/offers) successfully.`|
| **Main-Success Scenario** | `1.User selects the options “delete products”.`|
||`2.User selects the desired products from system provided list.`|
||`3.User confirms to delete`|
||`4.User deleted desired products (items/offers) successfully.`||
||
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Delete Products Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Delete%20Products.png)

###Use Case #12 (Edit Account Info)

|                  | Edit Account Info| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`User Goal`|
| **Primary Actor**| `User (Administrator, Salesperson)` |
| **Stakeholders-and their Interests** | `Administrator , Salesperson`|
 ||`User wants to change his/her password`|
| **Pre-Condition** |`User must be login to the system.`|
| **Success Guarantee**| `•User has changed his/her password successfully.`|
| **Main-Success Scenario** | `1) User chooses change password option.`|
||`2) System asks for current password.`|
||`3) User enters current password.`|
||`4) System verifies current password.`|
||`5)	System asks for new password.` |
||`6) User enters new password twice.`|
||`7) System changes current password with new.`|
| **Extensions (Alternative Flows)** |`4a. Incorrect current password`|
||` Proceed to step 2.`|
||`6a. Mismatching new passwords`|
||`Proceed from step 5.`
| **Frequency of Use**| `This use case has low frequency of occurrence.` |

####Edit Account Info Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/Edit%20Account%20Info.png)

###Use Case #13 (View Orders)

|                  | View Orders| 
 -------------- | ---------------------------------- |
| **Scope** | `Ready2Serve POS (System under development)`          |
| **Level** |`Admin Goal`|
| **Primary Actor**| `User (Administrator)` |
| **Stakeholders-and their Interests** | `Administrator `|
 ||`User: User wants to see the record of all orders placed`|
| **Pre-Condition** |`User must be login to the system as Admin.`|
| **Success Guarantee**| `1)User views all the orders successfully.`
||	`2)User granted access according to the type of user.` |
| **Main-Success Scenario** | `1.	User selects the options “view orders”.`|
||`2.	User selects to view all orders `|
|||
| **Extensions (Alternative Flows)** |**`2a. User can view order between specific dates , user enter starting date`**
||**`2b. User enters ending date `**|
||**`2c. System displays the order between these dates.`**||
| **Frequency of Use**| `This use case has high frequency of occurrence.` |

####View Orders Activity Diagram
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Activity/View%20Orders.png)
