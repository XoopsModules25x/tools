CREATE TABLE tools_blocks (
  bid mediumint(8) unsigned NOT NULL auto_increment,
  mid smallint(5) unsigned NOT NULL default '0',
  options varchar(255) NOT NULL default '',
  name varchar(150) NOT NULL default '',
  title varchar(255) NOT NULL default '',
  desciption varchar(255) NOT NULL default '',
  dirname varchar(50) NOT NULL default '',
  func_file varchar(50) NOT NULL default '',
  show_func varchar(50) NOT NULL default '',
  edit_func varchar(50) NOT NULL default '',
  template varchar(50) NOT NULL default '',
  tpl_content text,
  bcachetime int(10) unsigned NOT NULL default '0',
  bcachemodel tinyint(1) unsigned NOT NULL default '0',
  last_modified int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (bid)
) TYPE=MyISAM;