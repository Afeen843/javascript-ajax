<?php

interface menuInterface
{
    /**
     * MENU TABLE
     */
    const TABLE_NAME='navigation';


    /**
     * Navigation Columns Constants
     */
    const COLUMN_ENTITY_ID = 'entity_id';

    const COLUMN_PARENT_ID = 'parent_id';

    const COLUMN_KEY = 'menu_key';

    const COLUMN_TITLE = 'title';

    const COLUMN_URL = 'url';

    //const COLUMN_NAME = 'name';

    const COLUMN_CREATED_AT = 'created_at';

    const COLUMN_MODIFIED_AT = 'modified_at';

    const COLUMN_STATUS = 'status';


    /**
     * @param int $parentId
     * @param $params
     * @return mixed
     */

 function add($params=[]);

    /**
     * @param int $entityId
     * @return mixed
     */

 function delete(int $entityId);

    /**
     * @param int $entityId
     * @return mixed
     */

 function status(int $entityId ,int $status);


    /**
     * @param int $parentId
     * @return mixed
     */

 function show (int $parentId);

    /**
     * @param int $entityId
     * @return mixed
     */

 function update( int $entityId,$params);





}