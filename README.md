# Magenerds_SystemDiff

This extension is the successor of [TechDivision_SystemConfigDiff](https://github.com/techdivision/TechDivision_SystemConfigDiff) 
for Magento 2. Data from one Magento instance can be compared with another isntance. This is useful if you have a test
and a live system and you have to compare its data, i.e. system configuration. It is designed to be extended via `di.xml` 
in order to integrate more differs and readers.
 
## Command Line Usage
There is a command available which currently outputs the differences of the data sets of both systems. You can use it
like the following:

`bin/magento config-diff:execute`
 
## Integrate your own differs and readers
We implemented a differ and reader pool which hold concrete differ and reader implementations configured via `di.xml`.
Of course it is necessary to add a differ and a compatible data reader. The data reader's job is to know how to read the
requested data from the database. The differ's job is to receive the local and remote data in order to diff both data
sets. In order to integrate your own data reader and differ, add the following to your `di.xml`:
 
    <type name="Magenerds\SystemDiff\Differ\DifferPool">
        <arguments>
            <argument name="differs" xsi:type="array">
                <item name="yourDifferKey" xsi:type="string">Namespace\Module\Differ\YourOwnDiffer</item>
            </argument>
        </arguments>
    </type>
    
    <type name="Magenerds\SystemDiff\DataReader\DataReaderPool">
        <arguments>
            <argument name="dataReaders" xsi:type="array">
                <item name="yourDataReaderKey" xsi:type="string">Namespace\Module\DataReader\YourOwnReader</item>
            </argument>
        </arguments>
    </type>