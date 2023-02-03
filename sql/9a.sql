SELECT   "property "."name",
         "property_value"."value"
FROM     "property " 
INNER JOIN "property_value"  ON "property "."id" = "property_value"."property_id" 
WHERE "property_value"."product_id" = 1