SELECT   "property "."name"
FROM     "property_value" 
INNER JOIN "property "  ON "property_value"."property_id" = "property "."id" 
INNER JOIN "product"  ON "product"."id" = "property_value"."product_id" 
INNER JOIN "category"  ON "category"."id" = "product"."category_id" 
WHERE  "category"."name" = "Планшеты"
GROUP BY "property "."name" 
         