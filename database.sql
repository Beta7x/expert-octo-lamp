-- TABLE users
CREATE TABLE users (
  id
  first_name
  last_name
  email
  phone
  is_verified
  is_deleted
  created_at
  updated_at
  deleted_at
);


CREATE TABLE merchats (
  id
  user_id
  is_deleted
  store_id
  created_at
  updatad_at
  deleted_at
);

CREATE TABLE stores (
  id
  name
  address
  is_deleted
  created_at
  updated_at
  deleted_at
);

CREATE TABLE menus (
  id
  name
  price
  description
  is_deleted
  created_at
  updated_at
  deleted_at
);

CREATE TABLE orders (
  id
  is_deleted
  created_at
  updated_at
  deleted_at
);
