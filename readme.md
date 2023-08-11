# Nosql Database

A **NoSQL database** is a type of database that provides a flexible, schema-less data storage model. It diverges from the traditional relational databases by not adhering to a fixed schema, allowing for the storage and retrieval of diverse, unstructured, or semi-structured data formats. NoSQL databases are designed to handle high data volumes, provide horizontal scalability, and cater to specific use cases such as real-time data processing, IoT, big data, and more.

NoSQL databases are categorized into various types, including:

- **Document Stores:** Store data as documents (e.g., JSON, BSON), suitable for semi-structured data. Examples: MongoDB, Couchbase.
- **Key-Value Stores:** Store data as key-value pairs, efficient for caching and simple data retrieval. Examples: Redis, Amazon DynamoDB.
- **Columnar Databases:** Store data in columns rather than rows, ideal for analytics and data warehousing. Examples: Apache Cassandra, HBase.
- **Graph Databases:** Store data as nodes and edges, suitable for modeling and querying complex relationships. Examples: Neo4j, Amazon Neptune.
- **Time-Series Databases:** Optimize data storage and querying for time-series data. Examples: InfluxDB, OpenTSDB.
- **Wide-Column Stores:** Store data in columns, similar to columnar databases but with different data models. Example: Google Bigtable.

Each type is tailored to specific use cases and provides advantages in terms of scalability, performance, and data modeling flexibility. NoSQL databases offer an alternative approach to data management compared to traditional relational databases.

**MongoDB** is a popular open-source NoSQL database that uses a document-oriented data model. It falls under the category of document stores in the NoSQL landscape. MongoDB is designed to efficiently handle and manage large volumes of unstructured or semi-structured data. 

Key features of MongoDB include:

- **Document-Oriented:** Data is stored in documents, typically in JSON-like format (BSON). This flexible schema allows for dynamic and varied data structures within the same collection.

- **Scalability:** MongoDB can scale horizontally across multiple servers, making it suitable for applications that require high availability and performance.

- **Query Language:** MongoDB supports a powerful query language for retrieving and manipulating data. It also supports rich queries and indexes to optimize data retrieval.

- **Aggregation Framework:** MongoDB provides an aggregation framework for performing complex data transformations and analytics operations.

- **Automatic Sharding:** MongoDB can automatically distribute data across multiple machines to support growing datasets.

- **Replication:** MongoDB supports replication for data redundancy and high availability. Replicas can be used for failover and read scaling.

- **Geospatial Indexing:** It includes geospatial indexing and querying capabilities, making it suitable for location-based applications.

- **Adoption:** MongoDB is widely used across various industries and applications, including web applications, content management systems, real-time analytics, IoT, and more.

MongoDB's flexibility, scalability, and ease of use make it a popular choice for developers and organizations looking to manage and query large and dynamic datasets.


# Mongo DB

## Basic Concepts of MongoDB

1. **Database:** A database in MongoDB is a container for collections. It holds related data collections.

2. **Collection:** A collection is a group of documents that are similar in structure and content. It's roughly analogous to a table in relational databases.

3. **Document:** A document is a basic unit of data in MongoDB, represented in BSON format (Binary JSON). It's similar to a row in a relational table but doesn't require a fixed schema.

4. **Field:** A field is a key-value pair within a document, similar to a column in a relational table. Fields can hold various data types, including strings, numbers, arrays, and even nested documents.

5. **Document ID:** Each document in a collection has a unique identifier called the `_id`. This field is automatically created and serves as a primary key.

6. **Schema-less:** MongoDB is schema-less in the sense that documents in the same collection can have different structures. Fields can be added or removed without affecting other documents.

7. **CRUD Operations:** MongoDB supports the standard CRUD (Create, Read, Update, Delete) operations for managing documents within collections.

8. **Query Language:** MongoDB uses a powerful query language for retrieving documents from collections. It supports filtering, sorting, projection, and more.

9. **Indexes:** Indexes improve query performance by creating efficient access paths to the data. MongoDB automatically creates an index on the `_id` field and allows you to create custom indexes.

10. **Aggregation Framework:** MongoDB's aggregation framework provides tools for processing and transforming data in complex ways, including grouping, filtering, and computing aggregations.

11. **Replication:** MongoDB supports replication for data redundancy and high availability. Replicas are copies of the data that can be used for read scaling and failover.

12. **Sharding:** Sharding is the process of distributing data across multiple servers to handle large datasets and increase performance. MongoDB supports automatic sharding.

13. **Geospatial Indexing:** MongoDB offers geospatial indexing to support location-based queries, making it useful for applications involving geographic data.

14. **Drivers:** MongoDB provides official drivers for various programming languages, allowing developers to interact with the database using their preferred language.

15. **Atlas:** MongoDB Atlas is a fully managed cloud-based service that simplifies the deployment, management, and scaling of MongoDB databases.


## Example
**Database**: myblog

**Collection**: articles

```json
Doc 1

{
  "_id": ObjectId("61234e6b8e543a1234567890"),
  "title": "Introduction to MongoDB",
  "author": "Bia Verly",
  "content": "MongoDB is a NoSQL database...",
  "tags": ["database", "NoSQL", "MongoDB"],
  "published": true
}

Doc 2

{
  "_id": ObjectId("61234e6b8e543a1234567891"),
  "title": "Getting Started with MongoDB",
  "author": "Jane Smith",
  "content": "To start using MongoDB...",
  "tags": ["database", "NoSQL", "MongoDB"],
  "published": true
}
```

**Collection**: users
```json
{
  "_id": ObjectId("61234e6b8e543a1234567892"),
  "username": "johndoe",
  "email": "john@example.com",
  "age": 30,
  "is_active": true
}

{
  "_id": ObjectId("61234e6b8e543a1234567893"),
  "username": "janesmith",
  "email": "jane@example.com",
  "age": 28,
  "is_active": true
}
```

In this example:

* The database is named myblog.
* There are two collections: articles and users.
* Each collection contains documents, where each document represents a piece of data.
* The documents in the articles collection contain information about articles, including title, author, content, tags, and publication status.
* The documents in the users collection contain user information, such as username, email, age, and active status.

## Database
In MongoDB, a database is a logical container that holds one or more collections of data. It is used to organize and manage related sets of data within a MongoDB instance. A database can be thought of as a namespace for collections, providing a way to segregate different types of data or applications.
### Creating a Database in MongoDB

To create a database in MongoDB, follow these steps:

1. **Install MongoDB:** If not already done, download and install the MongoDB Community Server from the official MongoDB website: [Download MongoDB](https://www.mongodb.com/try/download/community)

2. **Start MongoDB:** Start the MongoDB server. Use the appropriate command for your system to start the server. For example, on a command line, you might use `mongod`.

3. **Connect to MongoDB:** Open a terminal or command-line interface and run the `mongo` command to connect to the MongoDB instance. This will launch the MongoDB shell.

4. **Create a Database:** In the MongoDB shell, use the `use` command to create a new database. For instance, to create a database named `mydb`, type:

```shell
use mydb
```

This command switches to the mydb database. The database is created when data is inserted into it.

5. **Inserting Data:**
To confirm the database creation, insert at least one document into a collection within the database. For example:
```php
db.users.insertOne({ "username": "johndoe", "email": "john@example.com" })
```
This inserts a document into a users collection within the mydb database.

### Common Database Methods in MongoDB

1. **`use(databaseName)`:** Switch to a different database context for operations.

2. **`showDatabases()`:** Show a list of available databases on the MongoDB server.

3. **`createCollection(collectionName, options)`:** Create a new collection within the current database.

4. **`getCollection(collectionName)`:** Retrieve a reference to a specific collection for further operations.

5. **`dropDatabase()`:** Delete the current database and all its collections.

6. **`listCollections()`:** List the collections within the current database.

7. **`dropCollection(collectionName)`:** Delete a specific collection from the current database.

8. **`stats()`:** Retrieve statistics about the current database, such as size and storage information.

9. **`runCommand(commandDocument)`:** Execute a database command. Commonly used for administrative tasks.

10. **`getLastError()`:** Retrieve information about the most recent operation performed on the database.

11. **`currentOp()`:** Retrieve information about the current database operations.

12. **`killOp(opId)`:** Terminate a specific database operation.

These methods provide control and management over the database itself, including operations related to creating, dropping, listing collections, retrieving statistics, executing commands, and more.


## Collections
In MongoDB, a collection is a group of individual documents, akin to a table in relational databases. Collections are where you store and organize data in a flexible, schema-less manner. Each document within a collection can have its own structure, meaning that different documents in the same collection can have varying sets of fields and data types.

1. **Create a Collection:**
```php
db.mycollection.insertOne({ "name": "example" })
```
By running the insertOne() method, you'll create the collection mycollection in the mydb database if it doesn't already exist. MongoDB will create the collection and insert the provided document as the first entry.

2. **Create a Collection 2:**
```php
db.createCollection("mycollection")
```

### Common Collection Methods

1. **`insertOne(document)` / `insertMany(documents)`:** Insert one or multiple documents into the collection.

2. **`find(query, projection)`:** Retrieve documents from the collection based on a query. You can specify a projection to limit the fields returned.

3. **`findOne(query, projection)`:** Retrieve a single document that matches the query. You can use a projection to limit the returned fields.

4. **`updateOne(query, update)` / `updateMany(query, update)`:** Update one or multiple documents that match the query with the specified update.

5. **`deleteOne(query)` / `deleteMany(query)`:** Delete one or multiple documents that match the query.

6. **`countDocuments(query)`:** Count the number of documents in the collection that match the query.

7. **`distinct(field, query)`:** Retrieve distinct values for a specific field in the collection that match the query.

8. **`aggregate(pipeline)`:** Perform aggregation operations on the collection using a sequence of stages defined in a pipeline.

9. **`createIndex(keys, options)`:** Create an index on one or more fields in the collection.

10. **`dropIndex(index)` / `dropIndexes()`:** Drop a specific index or all indexes on the collection.

11. **`renameCollection(newName)`:** Rename the collection.

These methods allow you to interact with collections and documents in MongoDB, enabling you to perform various operations such as basic CRUD operations, querying, updating, deleting, indexing, aggregation, and more.


## Documents

In MongoDB, a **document** is a fundamental unit of data storage. It's equivalent to a row in a relational database table but with distinct characteristics:

- **BSON Format:** Documents are stored in BSON (Binary JSON) format. BSON is a binary-encoded serialization of JSON-like data, optimized for efficient storage and retrieval.

- **Flexible Schema:** Unlike traditional relational databases, MongoDB allows documents within the same collection to have varying structures. This flexibility enables dynamic and adaptable data models.

- **Field-Value Pairs:** Documents are composed of key-value pairs, where each key represents a field and each value corresponds to the associated data.

- **Nested Documents:** MongoDB documents can contain nested documents and arrays, enabling the representation of complex and hierarchical data structures.

- **Document ID (_id):** Every document has a unique `_id` field, acting as a primary key. MongoDB automatically generates an `_id` if not provided.

- **CRUD Operations:** Documents support Create, Read, Update, and Delete (CRUD) operations within collections.

- **No Fixed Schema:** MongoDB lacks a rigid schema. This allows for the addition or removal of fields in documents without affecting other documents.

- **Atomic Operations:** MongoDB supports atomic operations on documents, ensuring the modification of specific fields occurs atomically.

- **Size Limitation:** Individual documents in MongoDB can be up to 16 megabytes in size.

- **Read and Write Concerns:** MongoDB offers control over data consistency and durability levels for reading from or writing to documents.

When working with MongoDB, you interact with documents using methods provided by the MongoDB driver or the MongoDB shell. Documents are the building blocks of data storage and retrieval, forming the foundation of MongoDB's flexible and schema-less data model.


```bash
{
  "field1": value1,
  "field2": value2,
  "field3": {
    "subfield1": subvalue1,
    "subfield2": subvalue2
  },
  "field4": [arrayValue1, arrayValue2],
  "field5": scalarValue
}

_id: ObjectId("5099803df3f4948bd2f98391"),
name: { first: "Alan", last: "Turing" },
birth: new Date('Jun 23, 1912'),
death: new Date('Jun 07, 1954'),
contribs: [ "Turing machine", "Turing test", "Turingery" ],
views : NumberLong(1250000)

```

### Common Document Methods in MongoDB

1. **insertOne(document: object, options: object)**
   - Inserts a single document into a collection.

2. **insertMany(documents: array, options: object)**
   - Inserts multiple documents into a collection.

3. **findOne(filter: object, options: object)**
   - Retrieves a single document that matches the specified filter.

4. **find(filter: object, options: object)**
   - Retrieves multiple documents that match the specified filter.

5. **updateOne(filter: object, update: object, options: object)**
   - Updates a single document that matches the specified filter.

6. **updateMany(filter: object, update: object, options: object)**
   - Updates multiple documents that match the specified filter.

7. **deleteOne(filter: object, options: object)**
   - Deletes a single document that matches the specified filter.

8. **deleteMany(filter: object, options: object)**
   - Deletes multiple documents that match the specified filter.

9. **countDocuments(filter: object, options: object)**
   - Returns the count of documents that match the specified filter.

10. **distinct(field: string, filter: object, options: object)**
    - Returns an array of distinct values for a specific field that match the specified filter.

### Common Queries Operators

**Comparison Operators**:
- `$eq`: Matches values that are equal to a specified value.
- `$ne`: Matches values that are not equal to a specified value.
- `$gt`: Matches values that are greater than a specified value.
- `$lt`: Matches values that are less than a specified value.
- `$gte`: Matches values that are greater than or equal to a specified value.
- `$lte`: Matches values that are less than or equal to a specified value.

```bash
// Find documents where the "age" field is greater than 25
db.collection.find({ age: { $gt: 25 } })

// Find documents where the "status" field is not "inactive"
db.collection.find({ status: { $ne: "inactive" } })
```

**Logical Operators**:
- `$and`: Joins query clauses with a logical AND.
- `$or`: Joins query clauses with a logical OR.
- `$not`: Inverts the effect of a query expression.
- `$nor`: Joins query clauses with a logical NOR.
```bash
// Find documents with age greater than 25 and status is "active"
db.collection.find({ $and: [{ age: { $gt: 25 } }, { status: "active" }] })

// Find documents with age greater than 25 or status is "active"
db.collection.find({ $or: [{ age: { $gt: 25 } }, { status: "active" }] })
```

**Element Operators**:
- `$exists`: Matches documents that have the specified field.
- `$type`: Selects documents if a field is of the specified type.
```bash
// Find documents where the "address" field exists
db.collection.find({ address: { $exists: true } })

// Find documents where the "phone" field does not exist
db.collection.find({ phone: { $exists: false } })
```

**Array Operators**:
- `$in`: Matches any of the values specified in an array.
- `$nin`: Matches none of the values specified in an array.
- `$all`: Matches arrays that contain all elements specified in an array.

**Text Search Operators**:
- `$text`: Performs text search.
- `$regex`: Matches documents based on regular expressions.

**Geospatial Operators**:
- `$geoWithin`: Selects geometries that are within a bounding geometry.
- `$geoIntersects`: Selects geometries that intersect with a given geometry.
- `$near`: Returns geospatial objects in proximity to a point.

**Array Element Operators**:
- `$elemMatch`: Selects documents that contain an array field with at least one element that matches the specified query.
